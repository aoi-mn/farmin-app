<template>
    <section class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0)">Forms</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Form Basic
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Form Basic</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div
                            v-if="$page.props.flash.message"
                            class="alert alert-success"
                        >
                            {{ $page.props.flash.message }}
                        </div>
                        <div class="card-header">
                            <h5>Form Controls</h5>
                        </div>
                        <div class="card-body">
                            <form @submit.prevent="updateBlog">
                                <div class="row">
                                    <!-- Image Upload -->
                                    <div class="col-md-6 mb-3">
                                        <label
                                            class="form-label"
                                            for="imageUpload"
                                            >Upload Image</label
                                        >
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="imageUpload"
                                            accept="image/*"
                                            @change="handleFileChange"
                                        />
                                    </div>

                                    <!-- Date Picker -->
                                    <div class="col-md-6 mb-3">
                                        <label
                                            class="form-label"
                                            for="datePicker"
                                            >Select Date</label
                                        >
                                        <input
                                            type="date"
                                            v-model="form.date"
                                            class="form-control"
                                            id="datePicker"
                                        />
                                        <div v-if="errors.date">
                                            {{ errors.date }}
                                        </div>
                                    </div>

                                    <!-- Text Box 1 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="textBox1"
                                            >User Name</label
                                        >
                                        <input
                                            type="text"
                                            v-model="form.name"
                                            class="form-control"
                                            id="textBox1"
                                            placeholder="Enter text here"
                                        />
                                        <div v-if="errors.name">
                                            {{ errors.name }}
                                        </div>
                                    </div>

                                    <!-- Text Box 2 -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="textBox2"
                                            >Post Heading</label
                                        >
                                        <input
                                            type="text"
                                            v-model="form.heading"
                                            class="form-control"
                                            id="textBox2"
                                            placeholder="Enter more text here"
                                        />
                                        <div v-if="errors.heading">
                                            {{ errors.heading }}
                                        </div>
                                    </div>

                                    <!-- Text Area -->
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="textArea"
                                            >Text Area</label
                                        >
                                        <textarea
                                            class="form-control"
                                            v-model="form.cont"
                                            id="textArea"
                                            rows="4"
                                            placeholder="Enter your comments here"
                                        ></textarea>
                                        <div v-if="errors.cont">
                                            {{ errors.cont }}
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="col-md-12 text-end">
                                        <button
                                            type="submit"
                                            :disabled="form.processing"
                                            class="btn btn-primary mb-4 me-2"
                                        >
                                        <span v-if="form.processing">Updating....</span>
                                        <span v-else>Update</span>
                                        </button>
                                        <a
                                            @click="blogCancel"
                                            class="btn btn-secondary mb-4"
                                            >Cancel</a
                                        >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout,
    data() {
        return {
            publicPath: import.meta.env.APP_URL || "/", // Use environment variable or default to root
        };
    },
};
</script>

<script setup>
import { ref } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { router } from "@inertiajs/vue3";

const props = defineProps({
    errors: Object,
    blog: Object,
});

// Define form state
const form = useForm({
    image: null,
    date: props.blog.date || '',
    name: props.blog.name || '',
    heading: props.blog.heading || '',
    cont: props.blog.cont || '',
});

// Update blog method
const updateBlog = () => {
    form.put(route('blog.update', props.blog.id), {
        if(res){
            form.reset;
        }
    });
};

// Handle file input change
const handleFileChange = (event) => {
    form.image = event.target.files[0];
};

// Cancel action
function blogCancel() {
    router.visit(route("blog.index"));
}
</script>


<style scoped>
.alert {
    margin: 10px 0;
    padding: 15px;
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    border-radius: 5px;
}
</style>
