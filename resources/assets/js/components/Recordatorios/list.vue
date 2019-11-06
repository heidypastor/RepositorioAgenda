<template>
	<div class="row">
		<spinner v-show="loading"></spinner>
		<div class="col-sm" v-for="recordatorio in recordatorios">
			<div class="card text-center" style="width: 18rem; margin-top: 50px">
			  <img style=" margin: 30px;height: 100px; width: 100px; background-color: #EFEFEF; " class="card-img-top rounded-circle mx-auto d-block" v-bind:src="recordatorio.picture" alt="">
			  <div class="card-body">
			    <h5 class="card-title">{{ recordatorio.name }}</h5>
			    <p class="card-text">Futura descripción de la cita</p>
			    <a href="/Cita/" class="btn btn-primary">Recordatorios...</a>
			  </div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return {
				recordatorios: [],
				loading: true
			}
		},
		mounted() {
            axios
            	.get('http://ensayo.test/recordatorios')
            	.then((res) => {
            		this.recordatorios = res.data
            		this.loading = false
            	});

        }
	}
</script>