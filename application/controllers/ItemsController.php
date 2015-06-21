<?php
/**
 * Created by PhpStorm.
 * User: Ellioc
 * Date: 6/21/2015
 * Time: 5:45 PM
 */
class ItemsController extends Controller
{
    function view($id = null, $name = null)
    {
        $this->set('title', $name . ' - My Todo List App');
        $this->set('todo', $this->Item->select($id));
    }

    function viewall()
    {
        $this->set('title', 'All Items - My Todo List App');
        $this->set('todo', $this->Item->selectAll());
    }

    function add()
    {
        $todo = $_POST['todo'];
        $this->set('title', 'Success - My Todo List App');
        $this->set('todo', $this->Item->query('insert into devdb1.items (item_name) values (\'' . mysql_real_escape_string($todo) . '\')'));
    }

    function delete($id = null)
    {
        $this->set('title', 'Success - My Todo List App');
        $this->set('todo', $this->Item->query('delete from items where id = \'' . mysql_real_escape_string($id) . '\''));
    }
}