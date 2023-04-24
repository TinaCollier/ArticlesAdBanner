# ArticlesAdBanner
*single.php file containing ad banner logic for articles.uie*

## Backstory
For this project as a Web Dev Fellow at [Center Centre - UIE](https://www.centercentre.com/), I was tasked with having a specific ad load for one article, Leslie Inman-Jensen's ['Yes. And ...' article](https://articles.uie.com/yes-and/), while all other articles load a different ad. 

At first, the file only contained the HTML logic for loading a set of text and an image retrieved from our servers. I added an `if...else` statement in PHP to determined which ad is loaded by first identifying the title of the ad that is selected. Based on that variable, the text and image are selected for the ad banner.

At the bottom of the file, using the `script` section determining the width of the screen size, a separate mobile image is presented within the ad. 

## Read More on My Blog
I went into more detail about this process in my blog on [tina.collier.blog](https://tina.collier.blog/2023/04/21/a-new-skill-added/). 
