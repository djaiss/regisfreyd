## How to use

As Jigsaw generates static sites, we need to compile before being able to use it.

```bash
./vendor/bin/jigsaw build
```

We also need to compile the assets if you’ve changed them.

```bash
npm run dev
```

To serve the site locally, you have to run

```bash
./vendor/bin/jigsaw serve
```

## Deployment

Before deploying the site to production, we need to compile the assets in a certain way.

```bash
npm run production
```