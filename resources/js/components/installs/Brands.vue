<template>
    <div>
        <h3 class="text-center">All Posts</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Brand</th>
                <th>Descripcion</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="brand in brands" :key="brand.id">
                <td></td>
                <td>{{ brand.mars_nombre }}</td>
                <td>{{ brand.mars_descripcion }}</td>
                <td><img src="" alt=""></td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: brand.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBrand(brand.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <router-view></router-view>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/installs/marcas-softwares')
                .then(response => {
                    this.posts = response.data;
                });
        },
        methods: {
            deleteBrand(id) {
                this.axios
                    .delete(`http://localhost:8000/installs/marcas-software/${id}`)
                    .then(response => {
                        let i = this.posts.map(item => item.id).indexOf(id); // find index of object
                        this.posts.splice(i, 1)
                    });
            }
        }
    }
</script>