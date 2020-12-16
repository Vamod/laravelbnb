<template>
    <div>
        <bookable-list-item title="Cheap Villa" content="a very cheap villa" :price="1000"></bookable-list-item>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
   components: {
       BookableListItem   
   } 
}
</script>