import './bootstrap.js';
import router from './routes';
import vuetify from './vuetify'

new Vue({
    el: '#app',
    vuetify,
    data: {
        drawer: false,
        group: null,
        optional: true,
        activeTab: null,
        items: [
            {
                title: 'Gartenhaus',
                avatar: 'fas fa-home',
                clicked: false,
                categories: [
                    {
                        title: 'Alle Gartenhäuser',
                        items: [
                            'Gartenhaus Holz',
                            'Gartenhaus Metall',
                            'Flachdachhaus',
                            'Pultdachhaus',
                            'Blockbohlenhaus',
                        ]
                    },
                    {
                        title: 'Blockbohlenhaus',
                        items: [
                            'Wandstärke 14 - 21 mm',
                            'Wandstärke 28 - 38 mm',
                            'Wandstärke 40 - 45 mm',
                            'Wandstärke 58 - 70 mm',
                            'Wandstärke > 70 mm',
                        ]
                    },
                    {
                        title: 'Elementbauweise',
                        items: [
                            'Gartenhaus 14 - 21 mm',
                            'Gartenhaus 28 - 34 mm',
                            'Gartenhaus 40 - 45 mm',
                            'Gartenhaus 58 - 70 mm',
                            'Gartenhaus > 70 mm',
                        ]
                    },
                    {
                        title: 'Gerätehaus',
                        items: [
                            'Geräteschrank',
                            'Brennholzlager',
                            'Metall Gerätehaus',
                            'Holz Gerätehaus',
                            'Lagerschuppen',
                        ]
                    }
                ],
            },
            {
                title: 'Gerätehaus',
                avatar: 'fas fa-tools',
                clicked: false,
                categories: [
                    {
                        title: 'Alle Gartenhäuser2',
                        items: [
                            'Gartenhaus Holz',
                            'Gartenhaus Metall',
                            'Flachdachhaus',
                            'Pultdachhaus',
                            'Blockbohlenhaus',
                        ]
                    },
                ],
            },
            {
                title: 'Wellness',
                avatar: 'fas fa-spa',
                clicked: false,
            },
            {
                title: 'Kinderspielgeräte',
                avatar: 'fas fa-child',
                clicked: false,
            },
            {
                title: 'Gewächshäuser',
                avatar: 'fas fa-seedling',
                clicked: false,
            },
            {
                title: 'Carport',
                avatar: 'fas fa-car',
                clicked: false,
            },
        ],
    },

    watch: {
        group() {
            this.drawer = false
        },
    }
    //router
});
