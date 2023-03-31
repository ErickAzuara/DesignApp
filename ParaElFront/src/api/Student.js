import apiconstants from "../static/apiconstants";
import axios from 'axios';
export default [
    index,
    show,
    update,
    store,
    destroy
];

function index (setStudent)
{
    const params = new URLSearchParams();
    const url = apiconstants.api_path+'students';
    axios.post(url,params)
    .then(res => {
        console.log(res.data)
        setStudent(res.data.data)
    })
    .catch(err => {
        console.error(err); 
    })
}

function show ()
{

}

function update ()
{

}

function store()
{

}

function destroy (serial_number,setStudents)
{
    const  params = new URLSearchParams();
    params.append('serial_number',serial_number);
    const url = apiconstants.api_path+'delete_student';
    axios.post(url,params)
    .then(res => {
        index(setStudents);
    })
    .catch(err => {
        console.error(err); 
    })    

}