import { createApp } from 'vue';

createApp({
    data() {
        return {
            countries: [],
            sortKey: 'country',
            sortOrder: 'asc',
            currentPage: 1,
            itemsPerPage: 5
        }
    },
    mounted() {
        fetch('http://localhost/actioneers/wp-json/latin/v1/countries')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Request error');
                }
                return response.json();
            })
            .then(data => {
                this.countries = data;
            })
            .catch(error => {
                console.error('An error has occurred:', error);
            });
    },
    computed: {
        sortedCountries() {
            return this.countries.sort((a, b) => {
                let modifier = this.sortOrder === 'asc' ? 1 : -1;
                if (a[this.sortKey] < b[this.sortKey]) return -1 * modifier;
                if (a[this.sortKey] > b[this.sortKey]) return 1 * modifier;
                return 0;
            });
        },
        paginatedCountries() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.sortedCountries.slice(start, end);
        },
        totalPages() {
            return Math.ceil(this.sortedCountries.length / this.itemsPerPage);
        }
    },
    methods: {
        sortBy(key) {
            if (this.sortKey === key) {
                this.sortOrder = this.sortOrder === 'asc' ? 'desc' : 'asc';
            } else {
                this.sortKey = key;
                this.sortOrder = 'asc';
            }
            this.currentPage = 1;
        },
        goToPage(page) {
            if (page >= 1 && page <= this.totalPages) {
                this.currentPage = page;
            }
        }
    }

}).mount('#app');
