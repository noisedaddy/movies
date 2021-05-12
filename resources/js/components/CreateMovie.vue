<template>
    <div>
        <h3 class="text-center">Add</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addMovies">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="movie.movie_name">
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" v-model="movie.movie_year">
                    </div>
                    <div class="form-group">
                        <label>Seen</label>
                        <input type="checkbox" class="form-control" v-model="movie.seen">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CreateMovie",
        data() {
            return {
                movie: {}
            }
        },
        methods: {
            addMovies() {
                this.axios
                    .post('http://localhost:8000/api/movies', this.movie)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

<style scoped>

</style>
