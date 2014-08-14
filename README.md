Planet
======

This is a project for storing the configuration, images and stylesheets of the FSMK planet hosted at http://fsmk.org/planet

##Adding new Blog

To add a new blog, following steps need to be followed:

1. Raise an issue in the project mentioning your association with FSMK and Free Software in general. Also share links to 3 blogs that you have written in your blog related to Free Software. This is just a simple screening criteria to ensure that we do not have too many blogs which are mostly inactive.
2. Fork the project on github and add the following to the config.ini file which is in "fsmk" directory.
<pre><code>

    [&lt;Link to the feed of the blog&gt;]    
    name = &lt;Your name&gt;

    where,
    
         "Link to the feed of the blog" is the RSS feed of the blogs with tag as FSMK. [Check this for more details.]()
         
         "Your name" is the name that you want to be displayed in the planet.
</code></pre>

3. Commit the same to your project and send a pull request as a fix to the issue raised in Step 1.

##Adding your hackergotchi

1. Generate your Hackergotchi. Check the following [Nicubunu's tutorial](http://howto.nicubunu.ro/gimp_hackergotchi/) to see how to generate it using GIMP.
2. Ensure that the image is in png format, of size 110px by 110px.
3. After generating, ensure that you compress it so that it is much smaller for the web. You can use either GIMP or any [online utility to compress](https://tinypng.com/) the png.
4. Store the name of the image as "&lt;BlogAddress&gt;.png". For example if your blog is http://blog.viggy.in then save the image name as "blog.viggy.in.png". This is important as when we have 100s of blogs, it will become difficult to match the images with the blogs added in planet.
5. Add the hackergotchi in the images directory.
6. In the config.ini file which is in "fsmk" directory, add the following line below the blog link of your which you have already added in "Adding new blog" section.
<pre><code>
    face = &lt;hackergotchi filename&gt;
</code></pre>
7. Commit the same to your project and send a pull request.