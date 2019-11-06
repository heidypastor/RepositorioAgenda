<template>
<div class="modal fade" id="addRecordatorio" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Recordatorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveRecordatorio">
	        <div class="form-group">
			    <label>Nombre del recordatorio</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombre del recordatorio" v-model="name">
		  	</div>
		  	<div class="form-group">
			    <label>Imagen del recordatorio</label>
			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="picture">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Save</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
	export default {
		data(){
			return{
				name: null,
				picture: null
			}
		},
		methods: {
			saveRecordatorio: function(){
				// console.log(this.name)
				// console.log(this.picture)
				axios.post('http://ensayo.test/recordatorios',{
					name: this.name,
					picture: this.picture
				})
				.then(function(res){
					console.log(res)
					$('#addRecordatorio').modal('hide')
					//EventBus.$emit('recordatorio-added', res.data.recordatorio)
				})
				.catch(function(err){
					console.log(err)
				});
			}
		}
	}
</script>

<style>
	
</style>