<script context="module" lang="ts">
	export const prerender = true;
</script>

<script>
	import axios from "axios";

	let playerName = "";
	let playerNumber = "";
	let playerPosition = "";
	let error = null;

	async function handleSubmit() {
		try {
			const response = await axios.post('http://127.0.0.1:8000/api/team', {
				name: playerName,
				number: playerNumber,
				position: playerPosition
			});
			console.log(response);
			alert('Velden toegevoegd');
			window.location.replace('/team');
		} catch (e) {
			error = e
		}
	}
</script>

<svelte:head>
	<title>Pec Zwolle</title>
</svelte:head>

<section>
	<div class='block'></div>
	<div class='container'>
		<h3 class='title is-3'>Voeg speler toe</h3>
		<div class='box'>
			{#if error !== null}
				{error}
			{:else}
			<div class='field'>
				<label class='label'>Naam</label>
				<div class="control">
					<input class="input" type="text" bind:value={playerName} name="name" placeholder="Naam">
				</div>
			</div>

			<div class='field'>
				<label class='label'>Rugnummer</label>
				<div class="control">
					<input class="input" type="text" bind:value={playerNumber} name="number" placeholder="Rugnummer">
				</div>
			</div>

			<div class='field'>
				<div class='select'>
					<select bind:value={playerPosition} name='position'>
						<option value='doelman'>Doelman</option>
						<option value='verdediger'>Verdediger</option>
						<option value='middelvelder'>Middenvelder</option>
						<option value='aanvaller'>Aanvaller</option>
					</select>
				</div>
			</div>

			<div class='field'>
				<div class='control'>
					<input type="submit" class='button is-danger' value="Verzenden" on:click={handleSubmit} />
				</div>
			</div>
			<pre>
				{JSON.stringify({playerName, playerNumber, playerPosition})}
			</pre>
			{/if}
		</div>
	</div>
</section>

<style>
    section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex: 1;
    }

    h1 {
        width: 100%;
    }

    .welcome {
        position: relative;
        width: 100%;
        height: 0;
        padding: 0 0 calc(100% * 495 / 2048) 0;
    }

    .welcome img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        display: block;
    }
</style>
