import {useForm} from 'react-hook-form'

export default function Login()
{

    const {
        register,
        handleSubmit,
        // formState: { errors },
    } = useForm(
        {
            defaultValues: {
                email: "",
                password: "",
            }
        }
    );

    const onSubmit = (data) => {
        console.log('hello');
        console.log(data);
    }

    return (
        <div className="flex justify-center items-center h-screen bg-gray-100">
            <div className="max-w-md w-full">
                <form onSubmit={handleSubmit(onSubmit)} className="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                    <div className=''>
                        <img className="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
                        <h2 className="mt-6 text-center mb-8 text-3xl font-extrabold text-gray-900">
                            Sign in With
                        </h2>

                        <div className="btn-container flex justify-around mb-6">
                            <button className='w-1/2 mr-2 bg-blue-900 text-white py-2  border rounded'> 
                                Facebook                            
                            </button>
                            <button className='w-1/2 ml-2 bg-slate-50  border rounded text-black' >
                                Google
                            </button>
                        </div>
                    </div>

                    <div className="mb-4">
                        <label htmlFor="email" className="block text-gray-700 text-base font-bold mb-2">Email</label>
                        <input id="email" type="text" {...register("email", { required: true })} className="border border-gray-400 appearance-none rounded w-full py-3 px-4 text-gray-70 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    <div className="mb-6">
                        <label htmlFor="password" className="block text-gray-700 text-base font-bold mb-2">Password</label>
                        <input id="password" type="password" {...register("password", { required: true })} className="border border-gray-400 rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    <div className="flex items-center justify-between">
                        <button type="submit" className="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rou nded focus:outline-none focus:shadow-outline">
                            Sign In 
                        </button>
                    </div>
                </form>

                {/* <p className="text-center text-gray-500 text-xs">
                    Don't have an account? <a href="#" className="font-bold text-blue-500 hover:text-blue-800">Sign Up</a>
                </p> */}

            </div>
        </div>
    );
    
}



