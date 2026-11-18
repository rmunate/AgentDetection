---
title: Contributing
editLink: true
outline: deep
---

<script setup>
import { VPTeamMembers } from 'vitepress/theme'

const members = [
  {
    avatar: 'https://avatars.githubusercontent.com/u/91748598?v=4',
    name: 'Raúl Mauricio Uñate Castro',
    title: 'Creator | Bogotá DC - Colombia',
    links: [
      { icon: 'github', link: 'https://github.com/rmunate'},
      { icon: 'linkedin', link: 'https://www.linkedin.com/in/raul-mauricio-unate-castro/' },
      { icon: 'facebook', link: 'https://www.facebook.com/people/Code-Maestro/100093438305767/' },
      { icon: 'instagram', link: 'https://www.instagram.com/code.maestro/' },
      { icon: 'twitter', link: 'https://twitter.com/rmunate' },
    ]
  },{
    avatar: 'https://avatars.githubusercontent.com/u/51100789?v=4',
    name: 'John Alejandro Diaz Pinilla',
    title: 'Developer | Bogotá DC - Colombia',
    links: [
      { icon: 'github', link: 'https://github.com/alejandrodiazpinilla'},
    ]
  }
]
</script>

# Contributing

If you want to add support for a new language or want to develop new features, you can submit your requests to the main branch of the repository.

## Running the checks

Use PHP 8.2 or later and an up-to-date Composer 2 for development. To run the suite against Laravel 13, use PHP 8.3 or later:

```shell
composer update --with "laravel/framework:^13.0"
composer test
composer analyse
```

Use `laravel/framework:^12.0` instead to test Laravel 12.

## Publishing the documentation

In the repository's [Pages settings](https://github.com/rmunate/AgentDetection/settings/pages), set **Build and deployment > Source** to **GitHub Actions**. The **Deploy from a branch** option uses Jekyll instead of publishing the VitePress build.

The [Deploy VitePress site to Pages](https://github.com/rmunate/AgentDetection/actions/workflows/deploy.yml) workflow publishes the site on pushes to `master`. After changing the publishing source, use **Run workflow** on `master` to publish without waiting for another push.

## Contributors

To date, the following world-class developers have contributed their knowledge.

To whom we thank for supporting making programming easier.

<VPTeamMembers size="small" :members="members" />

## License
This project is under the [MIT License](https://choosealicense.com/licenses/mit/).

🌟 Support My Projects! 🚀

[![Become a Sponsor](https://img.shields.io/badge/-Become%20a%20Sponsor-blue?style=for-the-badge&logo=github)](https://github.com/sponsors/rmunate)

Make any contributions you see fit; the code is entirely yours. Together, we can do amazing things and improve the world of development. Your support is invaluable. ✨

If you have ideas, suggestions, or just want to collaborate, we are open to everything! Join our community and be part of our journey to success! 🌐👩‍💻👨‍💻