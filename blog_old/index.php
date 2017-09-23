<?php
$version = '1.6.6';

require_once(__DIR__ . '/admin/DatasetAPI/datasets.php');

if((new DataSet_User())->cleanEntries()->getAll() === false || (new DataSet_Settings())->cleanEntries()->getAll() === false){
	exit(header("location:admin/setup.php"));
}


/*-----------------------------------------------------------------------------------*/
/* Get Settings & Functions
/*-----------------------------------------------------------------------------------*/

include_once(__DIR__ . '/admin/inc/functions.php');	


/*-----------------------------------------------------------------------------------*/
/* GET QUERY STRING VERSION
/*-----------------------------------------------------------------------------------*/

$filename 		= NULL;
$category 		= NULL;
$author 		= NULL;
$single_post	= NULL;

if(isset($_GET['filename']) && ($_GET['filename'] == 'rss' || $_GET['filename'] == 'atom')){$filename = $_GET['filename'];}
if(isset($_GET['category']) && $_GET['category'] != ""){$category = $_GET['category'];}
if(isset($_GET['author'])){$author = $_GET['author'];}
if(isset($_GET['postID'])){$single_post = $_GET['postID'];}

if($author != NULL){
	$author = new DataSet_User($author);
	if($author->getCurrentData() !== false){
		$avatar = glob($_SERVER['DOCUMENT_ROOT'] . "/" . $author->workingDir . "/avatar.*");
		$author = $author->getCurrentData();
		if(isset($avatar) && !empty($avatar) && $avatar !== false){
			$author['avatar'] = substr($avatar[0], strlen($_SERVER['DOCUMENT_ROOT'] . "/"));
		}
	}else {$author = NULL;}
}



$Settings = new DataSet_Settings("settings");

if($Settings->getCurrentData() !== false){
	$blog_image = glob($_SERVER['DOCUMENT_ROOT'] . "/" . $Settings->workingDir . "/blogimg.*");
	$Settings = $Settings->getCurrentData();
	if(isset($blog_image) && !empty($blog_image) && $blog_image !== false){
		$Settings['blogimg'] = substr($blog_image[0], strlen($_SERVER['DOCUMENT_ROOT'] . "/"));
	}
}else {$Settings = NULL;}

/*-----------------------------------------------------------------------------------*/
/* The Home Page (All Posts)
/*-----------------------------------------------------------------------------------*/

if ($filename==NULL && $single_post == NULL) {

	$elems_per_page = $feed_max_items;
	$page = (isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 1) ? $_GET['page'] : 1;
	$offset = ($page - 1) * $elems_per_page;

	$DataSet = new DataSet_Post();
	$allElements = $DataSet->getAll("publishdate");
	$releventElements = array();

	if($allElements != false){
		foreach($allElements as $elem){
			
			if (isset($_GET['search']) && !empty($_GET['search'])) {
				if( strpos(strtolower($elem["name"]), $_GET['search']) === false && strpos(strtolower($elem["body"]), $_GET['search']) === false && strpos(strtolower($elem["tags"]), $_GET['search']) === false ) {
					continue;
				}
			}

			if (!isset($elem["publishdate"]) || empty($elem["publishdate"])) continue;
			if (DataSet_Post::dateTimeFromString($elem["publishdate"]) >= DataSet_Post::normalizeDateTime(new DateTime())) continue;
			if ((isset($author) && isset($author['UID']) && $elem['author'] != $author['UID']) || (isset($author) && !isset($author['UID']))) continue;
			if (isset($category) && strpos(strtolower($elem["tags"]), $category) === false) continue;

			$releventElements[] = $elem;
		}
	}

	$postCount = 0;
	ob_start();
	foreach(array_slice($releventElements,$offset,$elems_per_page) as $entry){
		$postCount++;
		include $posts_file;
	}
	$markup = ob_get_contents();
	ob_end_clean();
	
	
	$page_title = "All Posts";
	
	$blog_image = $url.$Settings['blogimg'];

	// Get the page description and author meta.
	$get_page_meta[] = '<meta name="description" content="' . $Settings["blogdesc"] . '">';
	$get_page_meta[] = '<meta name="author" content="' . $Settings["blogname"] . '">';

	// Get the Twitter card.
	$get_page_meta[] = '<meta name="twitter:card" content="summary">';
	$get_page_meta[] = '<meta name="twitter:site" content="' . $Settings["twitter"] . '">';
	$get_page_meta[] = '<meta name="twitter:title" content="' . $Settings["blogname"] . '">';
	$get_page_meta[] = '<meta name="twitter:description" content="' . $Settings["blogdesc"] . '">';
	$get_page_meta[] = '<meta name="twitter:creator" content="' . $Settings["twitter"] . '">';
	$get_page_meta[] = '<meta name="twitter:image" content="' . $blog_image . '">';
	$get_page_meta[] = '<meta name="twitter:domain" content="' . $Settings["blogurl"] . '">';

	// Get the Open Graph tags.
	$get_page_meta[] = '<meta property="og:type" content="website">';
	$get_page_meta[] = '<meta property="og:title" content="' . $Settings["blogname"] . '">';
	$get_page_meta[] = '<meta property="og:site_name" content="' . $Settings["sitename"] . '">';
	$get_page_meta[] = '<meta property="og:url" content="' . $Settings["blogurl"] . '">';
	$get_page_meta[] = '<meta property="og:description" content="' . $Settings["blogdesc"] . '">';
	$get_page_meta[] = '<meta property="og:image" content="' . $blog_image . '">';

	// Get all page meta.
	$page_meta = implode("\n", $get_page_meta);



	if((isset($author) && $author === false) || ($postCount <= 0)){
		$page_title = "Page Error";
		$page_error = TRUE;
	}


	if(!isset($page_error)){
		
		if(isset($author)){
			$page_title = "Posts by " . $author["displayName"];
			include_once $author_file;
		}
		else{
			include_once $index_file;
		}

	}else{
		// Define the site title.
		$page_title = "Page Error";
		$page_meta = '';

		// Get the 404 page template.
		include $not_found_file;
	}

}

/*-----------------------------------------------------------------------------------*/
/* RSS Feed
/*-----------------------------------------------------------------------------------*/

else if ($filename == 'rss' || $filename == 'atom') {
	($filename=='rss') ? $feed = new FeedWriter(RSS2) : $feed = new FeedWriter(ATOM);

	$feed->setTitle($blog_title);
	$feed->setLink($blog_url);

	if($filename=='rss') {
		//$feed->setDescription($meta_description);
		$feed->setChannelElement('language', $language);
		$feed->setChannelElement('pubDate', date(DATE_RSS, time()));
	} else {
		//$feed->setChannelElement('author', $blog_title.' - ' . $blog_email);
		$feed->setChannelElement('updated', date(DATE_RSS, time()));
	}

	$DataSet = new DataSet_Post();
	$allElements = $DataSet->getAll("publishdate");

	if($allElements) {
		$c=0;
		foreach($allElements as $post) {
			if($c<10) {
				$item = $feed->createNewItem();

				// Remove HTML from the RSS feed.
				$item->setTitle($post['name']);
				$item->setLink(BLOG_URL."/post/".$post["slug"]);
				$item->setDate($post['publishdate']);

				if($filename=='rss') {
					$item->addElement('author', (new DataSet_User)->get($entry["author"])["displayName"]);
					$item->addElement('guid', BLOG_URL."/post/".$post["slug"]);
				}

				$item->setDescription($post["body"]);

				$feed->addItem($item);
				$c++;
			}
		}
	}
	$feed->genarateFeed();
}

/*-----------------------------------------------------------------------------------*/
/* Single Post Pages
/*-----------------------------------------------------------------------------------*/

elseif($single_post != NULL){

	$post = (new DataSet_Post())->get($single_post);

	// If there's no file for the selected permalink, grab the 404 page template.
	if (!$post) {
		// Define the site title.
		$page_title = "Page Error";

		// Get the 404 page template.
		include $not_found_file;

	// If there is a file for the selected permalink, display the post.
	} else {
		
		ob_start();
		// Get the post template file.
		include $post_file;

		$markup = ob_get_contents();
		ob_end_clean();
		
		ob_start();
		$page_title = $post["name"];
		
		$desc = substr(strip_tags(html_entity_decode($post["body"])), 0, 300);
		
		// Get the page description and author meta.
		$get_page_meta[] = '<meta name="description" content="' . $desc . '">';
		$get_page_meta[] = '<meta name="author" content="' . (new DataSet_User)->get($post["author"])["displayName"] . '">';

		// Get the Twitter card.
		$get_page_meta[] = '<meta name="twitter:card" content="summary">';
		$get_page_meta[] = '<meta name="twitter:site" content="' . $Settings["twitter"] . '">';
		$get_page_meta[] = '<meta name="twitter:title" content="' . $post["name"] . '">';
		$get_page_meta[] = '<meta name="twitter:description" content="' . $desc . '">';
		$get_page_meta[] = '<meta name="twitter:creator" content="' . $Settings["twitter"] . '">';
		$get_page_meta[] = '<meta name="twitter:image" content="' . $url.$post["headerImg"] . '">';
		$get_page_meta[] = '<meta name="twitter:domain" content="' . $Settings["blogurl"] . '">';

		// Get the Open Graph tags.
		$get_page_meta[] = '<meta property="og:type" content="website">';
		$get_page_meta[] = '<meta property="og:title" content="' . $post["name"] . '">';
		$get_page_meta[] = '<meta property="og:site_name" content="' . $Settings["sitename"] . '">';
		$get_page_meta[] = '<meta property="og:url" content="' . $Settings["blogurl"]."/post/".$post["slug"] . '">';
		$get_page_meta[] = '<meta property="og:description" content="' . $desc . '">';
		$get_page_meta[] = '<meta property="og:image" content="' . $url.$post["headerImg"] . '">';
		$get_page_meta[] = '<meta property="og:image:width" content="' . getimagesize($_SERVER["DOCUMENT_ROOT"].$post["headerImg"])[0] . '">';
		$get_page_meta[] = '<meta property="og:image:height" content="' . getimagesize($_SERVER["DOCUMENT_ROOT"].$post["headerImg"])[1] . '">';
		
		// Generate all page meta.
		$page_meta = implode("\n", $get_page_meta);
		
		ob_end_clean();
		// Get the index template file.
		include_once $index_file;
		
	}
}
