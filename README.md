Wordpress Simple Gist Embed
===========================
This plugin allows for easy gist embed via shortcode. It uses Blair Vanderhoof's jQuery plugin to display the gist (https://github.com/blairvanderhoof/gist-embed).

## Example
    [gist id="12345"]

## Options
This plugin supports all options currently supported by version 1.3 of the Gist Embed jQuery plugin, namely `id`, `hide-line-numbers`, `hide-footer`, `file`, `line`. Because the options are specified as shortcode attributes, there is no need to prepend them with `data-gist-`. Below is an example of an embeded gist with multiple options specified:

    [gist id="12345" line="2" hide-footer="true"]

Additionally, any unrecognized shortcode attributes are translated to html attributes. Below is an example of how you can add a css class to the outputted `<code>` element:

    [gist id="12345" class="myClass"]

## License
All code that is my own is released under the MIT License (open source, no warranty).