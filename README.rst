TYPO3 Extension "newsauthor"
============================

This extension adds a relation to the table 'fe_users' to a news record of EXT:news.

**Required**

- TYPO3 CMS 6.2 LTS
- EXT:news 3.2.0

**License**

GPLv2

Installation
------------

- Install the extension
- Create a frontend user
- Create/Open a news record and select the fe_user in the last tab

Templates
---------

You can output the fe_user by using ``{newsItem.feAuthor}``. As an example: ::

	<f:if condition="{newsItem.feAuthor}">
		<div>
			<h3>User: {newsItem.feAuthor.username}</h3>
			<p>{newsItem.feAuthor.firstName} {newsItem.feAuthor.lastName}</p>
		</div>
	</f:if>
	
This will output the username and the first and last name of the user.
 
 
