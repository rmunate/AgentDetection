import {defineConfig} from 'vitepress'

export default defineConfig({
    title: "Laravel Agent Detection",
    description: "Discovery and Analysis of Connection Agent Information!.",
    lang: 'en-US',
    lastUpdated: false,
    base: '/AgentDetection',
    themeConfig: {
        footer: {
            message: 'Released under the MIT License.',
            copyright: 'Copyright © 2021-2023 Raul Mauricio Uñate'
        },
        editLink: {
            pattern: 'https://github.com/rmunate/AgentDetection/tree/main/docs/:path'
        },
        logo: '/img/logo.png',
        nav: [
            {text: 'v1.4.0', link: '/'},
        ],
        sidebar: [
            {
                text: 'Getting Started',
                collapsed: false,
                items: [
                    {text: 'Introduction', link: '/getting-started/introduction'},
                    {text: 'Installation', link: '/getting-started/installation'},
                    {text: 'Release Notes', link: '/getting-started/changelog'},
                ]
            }, {
                text: 'Usage',
                collapsed: false,
                items: [
                    {text: 'Class Methods', link: '/usage/class-methods'},
                    {text: 'Blade Directives', link: '/usage/blade-directives'},
                ]
            }, {
                text: 'Contribute',
                collapsed: false,
                items: [
                    {text: 'Bug Report', link: 'contribute/report-bugs'},
                    {text: 'Contribution', link: 'contribute/contribution'}
                ]
            }
        ],

        socialLinks: [
            {icon: 'github', link: 'https://github.com/rmunate/AgentDetection'}
        ],
        search: {
            provider: 'local'
        }
    },
    head: [
        ['link', { 
                rel: 'stylesheet', 
                href: '/AgentDetection/css/style.css' 
            }
        ],
        ['link', {
                rel: 'icon',
                href: '/AgentDetection/img/logo.png',
                type: 'image/png'
            }
        ],
        ['meta', {
                property: 'og:image',
                content: '/AgentDetection/img/logo-github.png' 
            }
        ],
        ['meta', {
                property: 'og:image:secure_url',
                content: '/AgentDetection/img/logo-github.png'
            }
        ],
        ['meta', {
                property: 'og:image:width',
                content: '600'
            }
        ],
        ['meta', {
                property: 'og:image:height',
                content: '400'
            }
        ],
        ['meta', {
                property: 'og:title',
                content: 'AgentDetection'
            }
        ],
        ['meta', {
                property: 'og:description',
                content: 'Discovery and Analysis of Connection Agent Information! 🚀'
            }
        ],
        ['meta', {
                property: 'og:url',
                content: 'https://rmunate.github.io/AgentDetection/'
            }
        ],
        ['meta', {
                property: 'og:type',
                content: 'website'
            }
        ],
    ],
})
