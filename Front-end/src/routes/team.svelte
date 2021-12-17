<script context="module" lang="ts">
	export const prerender = true;
</script>

<script>
	import { onMount } from "svelte";
	import axios from "axios";

	const endpoint = "http://127.0.0.1:8000/api/team";
	let players = [];

	onMount(async function () {
		try {
			const response = await axios.get(endpoint);
			console.log(response.data);
			players = response.data;
		} catch (error) {
			console.error(error);
		}
	});
</script>

<svelte:head>
	<title>Pec Zwolle</title>
</svelte:head>

<section>
	<div class='block'></div>
	<div class='container'>
		<h3 class='title is-3'>Lijst van spelers</h3>
		<table class='table is-hoverable is-fullwidth'>
			<tr>
				<th>Naam</th>
				<th>Rugnummer</th>
				<th>Positie</th>
			</tr>
			{#each players as player}
				<tr>
					<td>{player.name}</td>
					<td>{player.number}</td>
					<td><p class='is-capitalized'>{player.position}</p></td>
				</tr>
			{/each}
		</table>
		<a sveltekit:prefetch href="/team/add" class='button is-link is-light'>Voeg speler toe</a>
	</div>
</section>