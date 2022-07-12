
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fregex.svg&fill=%23292524&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">REGEXER</h3>

<p align="center">
    Apply a regex to any post type and field. Test, Single ID or Bulk all posts of type. 
</p>    
</div>



##  1. <a name='TableofContents'></a>Table of Contents



* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Instance](#Instance)
	* 3.2. [WP_Query](#WP_Query)
	* 3.3. [Target field](#Targetfield)
	* 3.4. [Transform](#Transform)
		* 3.4.1. [Regex Replace.](#RegexReplace.)
		* 3.4.2. [Text Replace.](#TextReplace.)
		* 3.4.3. [Prefix.](#Prefix.)
		* 3.4.4. [Suffix.](#Suffix.)
		* 3.4.5. [Remove.](#Remove.)
	* 3.5. [Preview](#Preview)
	* 3.6. [Regex Sidebar](#RegexSidebar)
* 4. [Common Regexes used](#CommonRegexesused)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)
* 9. [Changelog](#Changelog)




##  2. <a name='AboutTheProject'></a>About The Project

> WARNING. CHANGES ARE PERMANENT. YOU CANNOT UNDO YOUR CHANGES ONCE YOU HAVE CHANGED THE POSTS. USE WITH CAUTION.

Highlights:

- Allows you to regex post fields on any post types.
- Uses `preg_replace()` on a post_type / post_field combination. 
- You can select preview or LIVE modes to test your regex before you apply it. 
- Within the LIVE mode you can either specify a single post ID or leave it optionally blank to apply the regex to ALL posts of that post type.

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.


* [ACF Pro](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)
* [Composer](https://getcomposer.org/)

<p align="right">(<a href="#top">back to top</a>)</p>




###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```sh
    git clone https://github.com/IORoot/wp-plugin__regex-posts ./wp-content/plugins/regexer
    ```
1. Activate plugin.

<p align="right">(<a href="#top">back to top</a>)</p>



##  3. <a name='Usage'></a>Usage


You can add as many regexer instances as you like. Each row is consisted of 5 tabs. 

###  3.1. <a name='Instance'></a>Instance

- Reference. What to call the instance.
- Enabled. Run this instance or not.

###  3.2. <a name='WP_Query'></a>WP_Query

- What posts / pages to target. Add a `WP_Query` array here.
e.g.
```
[
    'post_type' => 'posts',
    'numberposts' => 10,
]
```

###  3.3. <a name='Targetfield'></a>Target field

- Target Field. Which field do you wish to perform the regex replace on.

###  3.4. <a name='Transform'></a>Transform

- Transform (row). Add as many transform rows as you like. Each row will be performed in order and therefore can be chained together. There are five different types to choose from:

####  3.4.1. <a name='RegexReplace.'></a>Regex Replace.

This is to use the PHP `preg_replace_all()` function on the field.

- Regex Match. Use a PCRE Pattern to match on. 
    - [PCRE](https://www.php.net/manual/en/reference.pcre.pattern.syntax.php)
    - [Modifiers](https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php)

- Replacement. This is the text you will use as a replacement. You can use capture group variables `$1`, `$2`, etc...
```php
'/(text1)text2(text3)/is'

echo $1     # text1
echo $2     # text3
```

- Limit. Number of replacements to make. Leave blank for all.

####  3.4.2. <a name='TextReplace.'></a>Text Replace.

A simpler version of the find/replace. Doesn't use a regular-expression, just a simple text find and replacement.

- Find. Text to look for.
- Replacement. Text to replace with.

####  3.4.3. <a name='Prefix.'></a>Prefix.

Add text to the front of the field value.

- Prefix. Append to the start of any text in the field.

####  3.4.4. <a name='Suffix.'></a>Suffix.

Add text to the end of the field value.

- Suffix. Append to the end of any text in the field.

####  3.4.5. <a name='Remove.'></a>Remove.

- Remove. Similar to the the text replace, except that the replacement is nothing. So it will delete the found text.

###  3.5. <a name='Preview'></a>Preview

- Original Value. This is what the the value looks like before the transform rules are applied.
- Transformed Value. This is what the the value looks like after the transform rules are applied.

###  3.6. <a name='RegexSidebar'></a>Regex Sidebar

- Preview. The 'preview' mode will do all of the replacements and show the results in the `preview` tab. Howeveer, it will not perform the transforms on the real data and will not save the changes to the post.
- Save. Perform all of the transforms on the real data and save the results over the posts original value.

> WARNING. THIS IS PERMANENT. YOU CANNOT UNDO YOUR CHANGES ONCE YOU HAVE CHANGED THE POSTS. USE WITH CAUTION.

##  4. <a name='CommonRegexesused'></a>Common Regexes used 

1. `/\? \<a href.*/s`

1. `/\<p\>\? \<a.*/s`

1. `/\?ALL PARKOUR TUTORIALS.*/s`

1. `/#londonparkour.*/`

##  5. <a name='Troubleshooting'></a>Troubleshooting

none.

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>

##  9. <a name='Changelog'></a>Changelog

v1.0.0 - initial version
