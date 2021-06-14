<template>
	<div @dblclick="open">
		<strong @blur="update({ question: $event.target.innerText });">{{content.question}}</strong>
		<div style="margin-top:.3em;" v-html="content.answer" @blur="update({ answer: $event.target.innerText });"></div>
	</div>
</template>
