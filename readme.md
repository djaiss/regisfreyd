## How to use

As Jigsaw generates static sites, we need to compile before being able to use it.

```bash
./vendor/bin/jigsaw build
```

You don’t need to, but we can compile the assets if you’ve changed them.

```bash
npm run dev
```

Globally, to serve the site locally, you have to run and that's it.

```bash
npm run watch
```

## Deployment

Before deploying the site to production, we need to compile the assets in a certain way.

```bash
npm run production
```

The site is hosted on Vercel. It’s awesome.
