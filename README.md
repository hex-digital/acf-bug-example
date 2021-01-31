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

<img alt="Example of bug displaying in Chrome" src="https://user-images.githubusercontent.com/2754728/106381510-2bcabc00-63b1-11eb-90c3-728a31d4d0df.png">

## Steps to Reproduce

- Clone this repo as a theme into an existing WP installation
- Activate the theme
- Create a page 
- Add the "Test Block" to the page
- Publish page
- Go to the page in browser, and view source code
- Observe the above described bug
