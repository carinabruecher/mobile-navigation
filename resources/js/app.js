import './bootstrap.js';
import router from './routes';
import vuetify from './vuetify'

new Vue({
    el: '#app',
    vuetify,
    data: {
        drawer: false,
        group: null,
        sizeTab: null,
        activeTab: null,
        clicksOnTabs: 0,
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
                ],
            },
            {
                title: 'Gerätehaus',
                avatar: 'fas fa-tools',
                clicked: false,
                categories: [
                    {
                        title: 'Alle Gerätehäuser',
                        items: [
                            'Gartenhaus Holz',
                            'Gartenhaus Metall',
                            'Geräteschrank',
                            'Mährroboterhaus',
                            'Holzunterstand',
                        ]
                    },
                ],
            },
            {
                title: 'Wellness',
                avatar: 'fas fa-spa',
                clicked: false,
                categories: [
                    {
                        title: 'Saunen / Wellness',
                        items: [
                            'Elementsauna',
                            'Massivholzsauna',
                            'Gartensauna',
                            '230 Volt Sauna',
                            'Fasssauna',
                        ]
                    },
                    {
                        title: 'Outdoorsauna',
                        items: [
                            'Saunahaus',
                            'Gartensauna',
                            'Fasssauna',
                            'Sauna Kota',
                        ]
                    },
                ],
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

    methods: {
        increaseTabSize: function() {
            this.sizeTab = null
        },

        decreaseTabSize: function() {
            this.sizeTab = 'width: 65px'
        },
    },

    watch: {
        group() {
            this.drawer = false
        },
    }
    //router
});
