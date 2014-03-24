yii2-qtip
=========

A Yii2 qtip Plugin: http://qtip2.com/

Usage of this plugin is really simple. Let's take an example:

\sammaye\qtip\Qtip::widget([
    'hook' => '.what_does_this_mean',
    'content' => [
        'text' => new JsExpression("function(api){
            var caption = $(this).data('caption');
            return '<p style=\'font-size:13px; line-height:17px; margin:0;\'>'+caption+'</p>';
        }")
    ],
    'style' => [ 'classes' => 'ui-tooltip-shadow ui-tooltip-light' ],
    'position' => [
        'my' => 'bottom center',
        'at' => 'top center'
    ]
]);

Now there are in reality only two widget properties, one being `hook` and the other being `options`. All of the other properties you see here such as `content`, `style` and `position` 
are all being mnagically added to the `options` property` to be JSON encoded directly into the qtip plugins constructor in JavaScript. 

This means that in order to understand how to use this plugin you only need to know what `hook` is. `hook` denotes the element for which a tooltip will appear for. An example of this 
would be:

    <a href="#" class="what_does_this_mean" data-caption="The publisher has decided not to proceed with the publication of this book.">Details</a>

This would make it so that a tooltip containing the `data-caption` content would appear when the user hovers over this link, essentially this example in JS would be (and the plugin echos):

    $('.what_does_this_mean').qtip({
        "content":{
            "text":function(api){
                var caption = $(this).data('caption');
                return '<p style=\'font-size:13px; line-height:17px; margin:0;\'>'+caption+'</p>';
             }
        },
        "style":{
           "classes":"ui-tooltip-shadow ui-tooltip-light"
        },
        "position":{"my":"bottom center","at":"top center"}
    });

On how to use all the components of this plugin (due to its transparent nature) please refer to the qtip documentation: [here](http://qtip2.com/api).

Please file all issues on [GitHub issues](https://github.com/Sammaye/yii2-qtip/issues).