<?php
/**
 * The query.php (optional) should retrieve and process data from database and make it available to view.php.
 */

$blog = new stdClass();

$blog->title = 'Custom Routing to a Page Including a Form Example';
$blog->body  = 'This would be from the database.';
$blog->slug  = 'custom-routing-to-a-page-including-a-form-example';

/*
 //// You can retrieve a single blog post here using `db_select()` and `getSingleResult()`

 $blog = db_select('post')->where('id', $id)->getSingleResult();

 //// OR
 //// You can also use `db_fetchResult()` with SQL which returns the std object

 $sql = 'SELECT *, postTitle title FROM ' . db_table('post') . ' WHERE postId = :id';
 $blog = db_fetchResult($sql, array(':id' => $id));
*/

//// Retrieving the result count
//$sql = 'SELECT COUNT(*) FROM ' . db_table('post');
//$count = db_count($sql);
//echo $count . '<br>';
//
//$count = db_count('post')->fetch();
//echo $count . '<br>';
//
//// Retrieving a field
//$sql = 'SELECT MAX(postId) FROM ' . db_table('post');
//$max = db_fetch($sql);
//echo $max . '<br>';
//
//$sql = 'SELECT * FROM ' . db_table('post');
//$result = db_query($sql);
//
//echo db_numRows($result);
//
//$sql = 'SELECT slug, postTitle FROM '. db_table('post') . ' WHERE postId = 3';
//$post = db_fetchResult($sql);
//_dpr($post);
//exit;

if ($blog) {
    if ($slug && strcasecmp($slug, $blog->slug) !== 0) {
        # 301 redirect to the correct URL
        _redirect301(_url('blog', array($id, $blog->slug)));
    }
}
