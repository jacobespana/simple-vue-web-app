<template>	
	<div>
		<div class="box is-info">
			<p>
				<slot></slot>
			</p>
		</div>
	</div>
</template>

<script>
	export default{


	}

</script>

<style>
	.box{
		background:#e3e3e3;
		padding: 10px;
		border: 1px solid #c5c5c5;
		margin: 10px;	
	}


</style>