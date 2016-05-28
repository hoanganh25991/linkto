<?php
/**
 * create RULE, check if user can/cannot do sth
 * base on OUR RULES
 *
 * use create post, can DELETE post
 * if not, only admin can delete his post
 * App\Policies, register our-rule, than run it 
 * inside controller > effect view
 * @can $user->doSth()
 *      <form>
 *      	{{ csrf_field() }}
 *      	<a href="">delete</a>
 *      <form>
 * @endcan
 */