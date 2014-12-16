<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
	info:
		label:	Basic Info
		type:	headline
	title:
		label:	Title
		type:	text
	author:
		label:	Author
		type:	text
	description:
		label:	Description
		type:	text
	keywords:
		label:	Keywords
		type:	tags
	copyright:
		label:	Copyright
		type:	text


	contact:
		label:	Contact Information
		type:	headline
	phone:
		label:	Phone
		type:	tel
		width:	1/2
	email:
		label:	Email
		type:	email
		width:	1/2
	street:
		label:	Street
		type:	text
	city:
		label:	City
		type:	text
		width:	1/2
	state:
		label:	State
		type:	text
		width:	1/4
	zip:
		label:	Zipcode
		type:	number
		width:	1/4


	social:
		label:	Social Media
		type:	headline
	dribbble:
		label:	Dribbble
		type:	text
		icon:	dribbble
		width:	1/2
	facebook:
		label:	Facebook
		type:	text
		icon:	facebook
		width:	1/2
	github:
		label:	Github
		type:	text
		icon:	github-alt
		width:	1/2
	instagram:
		label:	Instagram
		type:	text
		icon:	instagram
		width:	1/2