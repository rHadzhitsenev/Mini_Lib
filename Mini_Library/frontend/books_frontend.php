<?php
/** @var $data \Data\Books\BooksViewData */


?>

<h1>Hello</h1>

<table cellpadding="5" border="1" cellspacing="0">

    <tr>
        <td>Author</td>
        <td>Title</td>
        <td>Genre</td>
        <td>Year</td>
        <td>Comment</td>
    </tr>

<?php
foreach ($data->getBooks() as $book){

    /** @var $book \Data\Books\Book */
    echo "<tr>

          <td>" . $book->getAuthor() . "</td>
          <td>" . $book->getTitle() . "</td>
          <td>" . $book->getGenre() . "</td>
          <td>" . $book->getYear() . "</td>
          <td>" . $book->getComment() . "</td>


</tr>";

}

?>

</table>




