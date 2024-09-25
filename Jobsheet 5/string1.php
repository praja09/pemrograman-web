<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, exercitationem ab. Consectetur, distinctio fuga odio reprehenderit reiciendis mollitia laudantium obcaecati eligendi suscipit, illo deleniti laboriosam quaerat hic error quasi eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quia nam, dolor modi unde repellendus. Molestias, aperiam quo facilis quae nihil magni! Eos dignissimos eligendi doloremque porro dolor veniam? Reprehenderit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem modi magni in provident, recusandae eligendi aspernatur fugiat, placeat consequuntur laborum ullam odit necessitatibus ratione corporis doloremque dolores itaque? Officia, iusto.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen( $loremIpsum ) ."<br>";
echo "Panjang kata: " . str_word_count( $loremIpsum ) ."<br>";
echo "<p>" . strtoupper( $loremIpsum ) ."<br>";
echo "<p>". strtolower( $loremIpsum ) ."<br>";

?>