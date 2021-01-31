# ACF Bug Example

There appears to be a bug when rendering ACF Blocks that use AlpineJS syntax.

A block containing data like this:

```html
<section x-data="{query: ''}" x-init="$watch('query', (value) => console.log(this) )"></section>
```

will escape the trailing quote, meaning the x-init="" is not closed, and the
code will not work.

```html
<section x-data="{query: ''}" x-init="$watch('query', (value) => console.log(this) )&#8221;></section>
```

## Steps to Reproduce

- Clone this repo as a theme into an existing WP installation
- Activate the theme
- Create a page 
- Add the "Test Block" to the page
- Publish page
- Go to the page in browser, and view source code
- Observe the above described bug
