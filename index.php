<?php
/******** RULES TO ORGANIZE YOUR CODE **************/
/*
 * 2 parts in a page: the top with php, the bottom with html
 * all queries have to be in the php part, at the beginning
 * in html part, if you start with php, you have to close with php
 * don't repeat yourself, so use variables and "include" to factorise your code
 */


// include the doctype and the top of the page which is the same on all pages
include_once ('_head.php');
include_once ('_nav.php');

;?>

<section>

    <h2>Bienvenue sur ma bibliothèque</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta libero vel fringilla iaculis. Nunc semper rhoncus ligula, ut porttitor leo euismod mattis. Nulla pulvinar tortor at leo condimentum, in dapibus risus porta. Quisque non ipsum nec mi pretium efficitur. Cras sodales, ligula non auctor pharetra, justo arcu efficitur velit, pretium dapibus mi orci at odio. Sed nisl sapien, tristique sed condimentum nec, auctor quis velit. Suspendisse sollicitudin mollis mauris, vel consequat velit tincidunt a. Etiam dapibus elementum magna eget eleifend. Praesent congue fringilla luctus. Phasellus turpis tellus, mollis sit amet neque quis, gravida dictum libero. Nunc ac sem convallis, pretium augue ac, tincidunt ante. Suspendisse ullamcorper imperdiet sem, interdum porttitor est pulvinar in. Fusce eget ex diam. Integer vehicula enim eget nulla luctus, elementum aliquet arcu fermentum.
    </p>

</section>

<?php include_once ('_footer.php');?>