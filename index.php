<?php
require 'setup.php';

/*
$author = new Author();
$author->setFirstName('jane');
$author->save();

echo $author->getId();
echo $author->getFirstName();
echo $author->toJSON();

$q = new AuthorQuery();
$firstAuthor = $q->findPK(1);

var_dump($firstAuthor);

$selectedAuthors = AuthorQuery::create()->findPKs(array(1,2,3));
var_dump($selectedAuthors);
*/
/*
$author = new Author();
$author->setFirstName('david');
$author->setLastName('vansl');
$author->save();

$authors = AuthorQuery::create()->filterByFirstName('jane')->find();
foreach($authors as $author) {
	echo $author->getFirstName().'<br />';
}

$authors = AuthorQuery::create()->orderByFirstName()->limit(5)->find();
echo count($authors);

// raw query
use Propel\Runtime\Propel;
$con = Propel::getWriteConnection('default');
$sql = 'SELECT * FROM author WHERE id = :id';
$stmt = $con->prepare($sql);
$res = $stmt->execute(array(':id' => 8));
var_dump($res);

use Propel\Runtime\Formatter\ObjectFormatter;
$formatter = new ObjectFormatter();
$formatter->setClass('\Author'); //full qualified class name
$authors = $formatter->format($con->getDataFetcher($stmt));
var_dump($authors);

AuthorQuery::create()->findPK(1)->setFirstName('persoon'.rand(1,100))->save();

//pager
$authorPager = AuthorQuery::create()->paginate(1, 5);
foreach($authorPager as $author) {	
	echo $author->getFirstName().'<br />';
}

echo $authorPager->getNbResults();   // total number of results if not paginated
echo $authorPager->haveToPaginate(); // return true if the total number of results exceeds the maximum per page
echo $authorPager->getFirstIndex();  // index of the first result in the page
echo $authorPager->getLastIndex();   // index of the last result in the page
$links = $authorPager->getLinks(5);  // array of page numbers around the current page; useful to display pagination controls
*/
/*
on demand hydratation: 
return collection instead of array
Using this feature, you'll never fall short of memory when retrieving a large number of results. Available through the setFormatter() method of Model Queries, on-demand hydration is very easy to trigger
*/

use Propel\Runtime\ActiveQuery\ModelCriteria;
$authors = AuthorQuery::create()
  ->limit(50000)
  ->setFormatter(ModelCriteria::FORMAT_ON_DEMAND) // just add this line
  ->find();
foreach ($authors as $author) {
  echo $author->getFirstName().'<br />';
}
?>