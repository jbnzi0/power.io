<template>  
    <div>
    <b-button variant="outline-primary">{{type}}</b-button>
    </div>
</template>

<script>
export default {
    name: 'b-button',
    props: {
        type: String
    }
}
</script>
