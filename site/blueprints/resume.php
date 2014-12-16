<?php if(!defined('KIRBY')) exit ?>

title: Resume
pages: false
files:
	sortable: true
fields:
	title:
		label: Title
		type:  text
	skills:
		label: Skills
		type:  structure
		fields:
			skill:
				label: Skill
				type:  text
	experience:
		label: Professional Experience
		type:  structure
		entry: >
			<b>{{job_name}}</b>, {{job_dates}}<br />
			{{job_desc}}
		fields:
			job_name:
				label: Job Name
				type:  text
			job_dates:
				label: Dates of Employment
				type:  text
			job_desc:
				label: Description
				type:  textarea
	education:
		label: Formal Education
		type:  structure
		entry: >
			<b>{{school_name}}</b>, {{school_dates}}<br/>
			{{school_desc}}
		fields:
			school_name:
				label: School Name
				type:  text
			school_dates:
				label: Dates of Enrollment
				placeholder: Fall 2007 – Spring 2011
				type:  text
			school_desc:
				label: Description
				type:  textarea
	contacts:
		label:	References
		type:	text
		default:References available upon request.