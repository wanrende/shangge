<template>
    <div>
        <header-index></header-index>
        <v-wiper></v-wiper>
        <content-message></content-message>
        <Series></Series>
        <footer-index></footer-index>
    </div>
</template>
<script>
    import vWiper from './vWiper'
    import ContentMessage from './contentMessage'
    import Series from './series'
    import HeaderIndex from './headerIndex'
    import FooterIndex from './footerIndex'


    export default {
        components: {
            vWiper,
            ContentMessage,
            Series,
            HeaderIndex,
            FooterIndex
        }
    }
</script>