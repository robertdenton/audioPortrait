# Audio Portraits #

A super simple, responsive template for audio portraits in mostly HTML/CSS with a pinch of JavaScript. 

See example here: [http://www.cuindependent.com/people-boulder/people-of-420](http://www.cuindependent.com/people-boulder/people-of-420)

## How to get this up and running ##

The files include straight HTML files and PHP files for integration into Wordpress.

The HTML files should work out of the box, you just need to plug in your own media.

The Wordpress files will require you to FTP both the header-char and page-people in to a child theme, then publish a page with that template. I would strongly encourage anyone to create their own custom page template with my files as a guide because every theme is different.

## Manipulating the files ##

Both the HTML and PHP files are similar in content so I'll discuss them together and note the differences as best I can.

The page has three segments of content. First is the thumbnail links, second is the body copy and third is each audio portrait.

The thumbnail links link to each individual div id below. The animation is done via jQuery .animate, that's the first JavaScript function.

Depending on the width of your page, you may want to test how many thumbnails your page can hold before you begin a second row.

The second part, the body copy, is straight HTML in the HTML file and doesn't require much explaining. The PHP file, however, pulls the text from the body of the Page and displays it out like any other page.

The audio portrait part is the most complicated. Each is numbered out so you can see each block of code for each audio portrait.

Each audio portrait is split in half horizontally with a width of 50% (in browser). The left side can be identified with the class "left" and the same with right. The "media" and "description" classes switch every other audio portrait.

In "media" you have an image and audio tag. Note that controls are disabled for the audio and that you should have an MP3, Ogg and text message for different browser compatibilities.

Then you have the discription, which is mostly text and one image. The image has an onClick attribute. This calls our second JavaScript function which plays the audio clip associated with that audio portrait. Note that the parameters of the function need to be changed for each audio portrait.

The function also swaps the play and pause button png files. Note that you'll need to change the path in that function to match your file structure.

That's about it. You then just copy and paste until you have all the audio portraits you want. Feel free to get in touch if you have any questions.