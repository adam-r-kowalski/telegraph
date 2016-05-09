# Telegraph

### What problem does this solve?

This aims to address writing HTML inside of PHP.  Rather then using string concatenation, you can use pure functions and data structures to generate your HTML.  This allows you to have greater expressive power and gives you a simple way to create complex server rendered views.

### Getting started

You can create elements by calling the `el` function, passing in an element name and a string to use as the body.

```php
el("div", "hello world");
```

The resulting HTML, unsurprisingly looks like this.

```html
<div>hello world</div>
```

Lets be honest, you don't wan't to type type el("div", ...) everytime you wish to create div.  Almost every type of element has a corresponding function to make its creation a breeze.  Therefore, the above is equivalent to

```php
div("hello world");
```

### Attributes

Thats nice and all, but what about class names, and any other attributes my elements need to be successful in the wild.  Rather then simply strings, telegraph allows you pass in an array of attributes, which will automagically do the right thing.

```php
div(["class" => "my-fancy-class"], "hello world")
```

```html
<div class="my-fancy-class">hello world</div>
```

You can also pass in a list of class names, and it will sill work just fine.

```php
div(["class" => ["class-1", "class-2", "class-3"]], "hello world")
```

```html
<div class="class-1 class-2 class-3">hello world</div>
```

### Child elements

Generating child elements is just as easy, since each function returns a string, composing them is really easy.

```php
div(i("i'm italicized"))
```

```html
<div><i>i'm italicized</i></div>
```

As usual, arrays will just work

```php
ul([
  li("first"),
  li("second"),
  li("third")
])
```

All HTML will of course be minified, so it might be hard to read

```html
<ul><li>first</li> <li>second</li> <li>third</li></ul>
```

### Attributes and Children together

You might be wondering how you can pass either attributes, or children as the first argument.  The answer is that I check the type of argument passed in and decide wether or not your array has key value pairs.  If it does I treat it as attributes, and the second argument will be the children.  Otherwise I assume there are no attributes and the first argument will be treated as the children.

```php
ul(["class" => "lists"], [
  li("first"),
  li("second"),
  li("third")
])
```

```html
<ul class="lists"><li>first</li> <li>second</li> <li>third</li></ul>
```

### Self closing tags

Wait a second, does it still work with img, br, hr and other such weirdos? 

```php
img(["src" => "path/to/img", "class" => "my-img"])
```

```html
<img src="path/to/img" class="my-img" />
```

### Help the tag that I wan't doesn't have a helper function!!!

Create a function with whatever name you would like that works like so

```php
function name($attributes = [], $children = "") {
  return el("name", $attributes, $children);
}
```

If it is self closing, then do this instead

```php
function name($attributes = []) {
  return selfClosing("name", $attributes);
}
```
