<script lang="ts">
	import Header from '$lib/header/Header.svelte';
</script>

<Header />

<main>
	<slot />
</main>
<div class='block'></div>
<div class='block'></div>
<footer class="footer">
	<div class="content has-text-centered">
		<p>
			©Pec Zwolle 2021
		</p>
	</div>
</footer>