<template>
    <!-- [ Main Content ] start -->

    <div class="pc-container">
        <div v-if="$page.props.flash.message" class="alert alert-success">
            {{ $page.props.flash.message }}
        </div>
        <div class="pc-content">
            <!-- [ Breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../dashboard/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0)">Blog</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Blog List
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Blog List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5>Blog List</h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a
                                        @click="blogCreate"
                                        class="btn btn-primary"
                                        >Add Row</a
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-3">
                            <div class="table-responsive">
                                <table
                                    class="table table-hover"
                                    id="pc-dt-simple"
                                >
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Heading</th>
                                            <th>Content</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(blogItem, index) in blog"
                                            :key="index"
                                        >
                                            
                                            <td>{{ blogItem.date }}</td>
                                            <td>{{ blogItem.name }}</td>
                                            <td>{{ blogItem.heading }}</td>
                                            <td
                                                class="truncate"
                                                :title="blogItem.cont"
                                            >
                                                {{ blogItem.cont }}
                                            </td>
                                            <td>
                                                <a
                                                    @click="
                                                        blogEdit(blogItem.id)
                                                    "
                                                    class="avtar avtar-xs btn-link-secondary"
                                                >
                                                    <i
                                                        class="ti ti-edit f-20"
                                                    ></i>
                                                </a>
                                                <a
                                                    @click="
                                                        blogDrop(blogItem.id)
                                                    "
                                                    class="avtar avtar-xs btn-link-secondary"
                                                >
                                                    <i
                                                        class="ti ti-trash f-20"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Repeat similar rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
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
import { router, useForm } from "@inertiajs/vue3";

function blogCreate() {
    router.visit(route("blog.create"));
}

function blogEdit(id) {
    router.visit(route("blog.edit", id));
}

const form = useForm({});

const blogDrop = (blogItemId) => {
    if (confirm("Are you sure you want to delete this item?")) {
        form.delete(route("blog.destroy", blogItemId));
    }
};

const props = defineProps({
    blog: Array,
});

const publicPath = import.meta.env.APP_URL || "/";
</script>

<style scoped>
.table-responsive {
    overflow-x: auto;
}

.table th,
.table td {
    white-space: nowrap;
    padding: 0.5rem;
}

.truncate {
    max-width: 150px; /* Adjust width as needed */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.table th,
.table td {
    vertical-align: middle;
}

@media (max-width: 768px) {
    .table-responsive {
        -ms-overflow-style: -ms-autohiding-scrollbar;
        overflow-y: hidden;
    }
}
</style>
