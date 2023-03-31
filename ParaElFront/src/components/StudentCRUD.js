import React,{useState,useEffect} from 'react';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableContainer from '@mui/material/TableContainer';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Paper from '@mui/material/Paper';
import UpdateButton from './UpdateButton';
import DestroyButton from './DestroyButton';
import UpdateStudentModal from './UpdateStudentModal';
/*
function createData(name, calories, fat, carbs, protein) {
  return { name, calories, fat, carbs, protein };
}

const row = [
  createData('Frozen yoghurt', 159, 6.0, 24, 4.0),
  createData('Ice cream sandwich', 237, 9.0, 37, 4.3),
  createData('Eclair', 262, 16.0, 24, 6.0),
  createData('Cupcake', 305, 3.7, 67, 4.3),
  createData('Gingerbread', 356, 16.0, 49, 3.9),
];
*/

export default function StudentCRUD(props) {
  const [open, setOpen] = useState(false);

    const handleClickOpen = () => {
      setOpen(true);
    };
  return (
    <div>
      <UpdateStudentModal open={open} setOpen={setOpen}></UpdateStudentModal>
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 300 }} size="small" aria-label="a dense table">
        <TableHead>
          <TableRow>



            <TableCell align="center">Serial number</TableCell>
            <TableCell align="center">Name</TableCell>
            <TableCell align="center">Surname</TableCell>
            <TableCell align="center">Group</TableCell>
            <TableCell align="center">Actions</TableCell>

            
          </TableRow>
        </TableHead>
        <TableBody>
          {props.students.map((row) => (
            <TableRow  key={row.id}>
              <TableCell align="center">{row.serial_number}</TableCell>
              <TableCell align="center">{row.name}</TableCell>
              <TableCell align="center">{row.surname}</TableCell>
              <TableCell align="center">{row.group.grade+" "+row.group.name}</TableCell>
              <TableCell align='right'>
             <UpdateButton handleClickOpen={handleClickOpen} ></UpdateButton>
              <DestroyButton setStudents={props.setStudents} serial_number={row.serial_number}></DestroyButton>
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
    </div>
  );
}