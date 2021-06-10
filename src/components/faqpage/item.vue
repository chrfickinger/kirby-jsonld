<template>
	<div @dblclick="open">
		<strong contenteditable="true" @blur="update({ question: $event.target.innerText });">{{content.question}}</strong>
		<div style="margin-top:.3em;" v-html="content.answer" contenteditable="true" @blur="update({ answer: $event.target.innerText });"></div>
	</div>
</template>