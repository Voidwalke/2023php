<template>
    <div v-show="this.msg != null " >
        Добавлена новая статья 
        <strong>
            <a href="article/4">

            </a>
            {{ this.msg }}
        </strong>
    </div>
</template>
<script>
    export default{
        data() {
            return{msg:null}
        },
        created(){
            window.Echo.channel('test').listen('EventNewArticle', (name)=>{
                console.log(name);
                this.msg=name.article.title;
                
            })
        }
    }
</script>