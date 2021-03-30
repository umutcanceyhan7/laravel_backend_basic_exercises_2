# Laravel Task

## Description

Dashboard is one module of StrixEye. Our customers can manage their assets on the Dashboard and view the suspects/suspicions detected on the their websites.

## Modules
* Users
  * Fields: `email, password`
* Possessors
  * Fields: `name, picture, age, score`
* Pokemons
  * Fields: `name, picture, age, height, evolves_from, evolves_to, weakness, ability`

## Rules
* Users => Standart Laravel Auth.
  * Users should be able to add Possessor.
  * Users should be able to add Pokemon.
* Possessors <-> Pokemons => Many to Many Relation

## General Rules
* Please use Laravel 8.
* Please write Factories and Seeders.
* Please use GIT when develop tool.
* Please commit every small changes. Don't commit multiple tasks in a single commit.
* Please write tests for your functions.
