<script lang="ts">
	import { page } from '$app/stores';
	import logo from './pec-zwolle.png';
	import banner from './pec-zwolle-banner.jpg';

	let id;
</script>

<header>
	<nav class='navbar is-info' role='navigation' aria-label='main navigation'>
		<div class="navbar-brand">
			<a class="navbar-item" href="/">
				<img src="{logo}">
			</a>
		</div>
		<div id="navbarBasicExample" class="navbar-menu">
			<div class='navbar-end'>
				<a class='navbar-item' class:active={$page.path === '/'}><a sveltekit:prefetch href="/" class='has-text-light'>Home</a></a>
				<a class='navbar-item' class:active={$page.path === 'team'}><a sveltekit:prefetch href="/team" class='has-text-light'>Team</a></a>
			</div>
		</div>
	</nav>

	<figure class="image is-5by1">
		<img src="{banner}" alt="">
	</figure>
<!--	<div class="corner">-->
<!--		&lt;!&ndash; TODO put something else here? github link? &ndash;&gt;-->
<!--	</div>-->
</header>

<style>
	/*header {*/
	/*	display: flex;*/
	/*	justify-content: space-between;*/
	/*}*/

	/*.corner {*/
	/*	width: 3em;*/
	/*	height: 3em;*/
	/*}*/

	/*.corner a {*/
	/*	display: flex;*/
	/*	align-items: center;*/
	/*	justify-content: center;*/
	/*	width: 100%;*/
	/*	height: 100%;*/
	/*}*/

	/*.corner img {*/
	/*	width: 2em;*/
	/*	height: 2em;*/
	/*	object-fit: contain;*/
	/*}*/

	/*nav {*/
	/*	display: flex;*/
	/*	justify-content: center;*/
	/*	--background: rgba(255, 255, 255, 0.7);*/
	/*}*/

	/*svg {*/
	/*	width: 2em;*/
	/*	height: 3em;*/
	/*	display: block;*/
	/*}*/

	/*path {*/
	/*	fill: var(--background);*/
	/*}*/

	/*ul {*/
	/*	position: relative;*/
	/*	padding: 0;*/
	/*	margin: 0;*/
	/*	height: 3em;*/
	/*	display: flex;*/
	/*	justify-content: center;*/
	/*	align-items: center;*/
	/*	list-style: none;*/
	/*	background: var(--background);*/
	/*	background-size: contain;*/
	/*}*/

	/*li {*/
	/*	position: relative;*/
	/*	height: 100%;*/
	/*}*/

	/*li.active::before {*/
	/*	--size: 6px;*/
	/*	content: '';*/
	/*	width: 0;*/
	/*	height: 0;*/
	/*	position: absolute;*/
	/*	top: 0;*/
	/*	left: calc(50% - var(--size));*/
	/*	border: var(--size) solid transparent;*/
	/*	border-top: var(--size) solid var(--accent-color);*/
	/*}*/

	/*nav a {*/
	/*	display: flex;*/
	/*	height: 100%;*/
	/*	align-items: center;*/
	/*	padding: 0 1em;*/
	/*	color: var(--heading-color);*/
	/*	font-weight: 700;*/
	/*	font-size: 0.8rem;*/
	/*	text-transform: uppercase;*/
	/*	letter-spacing: 0.1em;*/
	/*	text-decoration: none;*/
	/*	transition: color 0.2s linear;*/
	/*}*/

	/*a:hover {*/
	/*	color: var(--accent-color);*/
	/*}*/
</style>
