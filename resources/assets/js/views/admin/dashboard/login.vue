<template>
    <div class="login-wrapper">
        <div class="login-main">
            <Form ref="formItem" :model="formItem" :rules="ruleItem" item>
        <Form-item prop="user">
            <Input type="text" v-model="formItem.user" placeholder="Username">
                <Icon type="ios-person-outline" slot="prepend"></Icon>
            </Input>
        </Form-item>
        <Form-item prop="password">
            <Input type="password" v-model="formItem.password" placeholder="Password">
                <Icon type="ios-locked-outline" slot="prepend"></Icon>
            </Input>
        </Form-item>
        <Form-item>
            <Button type="primary" @click="handleSubmit('formInline')" long>登录</Button>
        </Form-item>
    </Form>
        </div>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                formItem: {
                    user: '',
                    password: ''
                },
                ruleItem: {
                    user: [
                        { required: true, message: '请填写用户名', trigger: 'blur' }
                    ],
                    password: [
                        { required: true, message: '请填写密码', trigger: 'blur' },
                        { type: 'string', min: 6, message: '密码长度不能小于6位', trigger: 'blur' }
                    ]
                }
            }
        },
        methods: {
            handleSubmit(name) {
                console.log(this.$refs.formItem)
                this.$refs.formItem.validate((valid) => {
                    console.log(valid);
                    if (valid) {
                        this.$Message.success('提交成功!');
                    } else {
                        this.$Message.error('表单验证失败!');
                    }
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .login-wrapper {
        background: #ddd;
        min-height: 100vh;
        padding: 30vh;
        .login-main {
            padding: 40px 40px 16px;
            background: #fff;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 5px;
        }
    }
</style>