<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Karina_webapi</div>


                    <div v-if="loading === false" class="card-body">
                       Contoh hasil panggilan endpoint api
             
                       <p>Response:</p>
                       <table>
                           <thead>
                               <tr>
                                   <th>Nama</th>
                                   <th>Jk</th>
                                   <th>Dibuat pada  </th>
                               </tr>
                           </thead>
                           <tbody>
                            <!-- php:foreach(item as data0) -->
                            <!-- $item -->
                            <!-- $item-> id-->
                                   <td>{{ item.nama}}</td>
                                   <td>{{item.jk}}</td>
                                   <td>{{item.created_at}}</td>
                                   <td></td>
                               </tr>
                           </tbody>
                           {{error}}
                       </table>
                    </div>
                    <div v-else class="card-body">
                        Loading...
                    </div> 
                </div>
            </div>
        </div>
         <vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                data:[],
                error: null,
                loading: false

            }
        },

        mounted() {
            this.getData()
        },

        methods: {
            getData(){
                this.loading = true
                this.$Progress.start()
                axios.get('/testapi') //1
                .then((res) => { //2
                    this.data = res.data.data
                    this.loading = false
                    this.$progress.finish()

                })
                .catch(() => { //3
                    this.error = error.message
                    this.loading = false
                    this.$progress.fail()
                })

            }
        }
    }
</script>
