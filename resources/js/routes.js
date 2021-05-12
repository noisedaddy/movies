import AllMovies from "./components/AllMovies";
import CreateMovie from "./components/CreateMovie";

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllMovies
    },
    {
        name: 'create',
        path: '/create',
        component: CreateMovie
    },
]
