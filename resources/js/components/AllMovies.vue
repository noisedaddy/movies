<template>
    <div>
        <h2 class="text-center">Products List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="movie in movies" :key="movie.id" :class="{'blue': movie.seen === 1}">
                <td>{{ movie.id }}</td>
                <td>{{ movie.movie_name }}</td>
                <td>{{ movie.movie_year }}</td>
                <td>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "AllMovies",
        data() {
            return {
                movies: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/movies')
                .then(response => {
                    this.movies = response.data;
                });
        },
    }
</script>

<style scoped>

</style>
