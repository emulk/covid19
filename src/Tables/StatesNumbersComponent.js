import React, { Component } from 'react';
import { Table, Row, Col } from 'react-bootstrap';
import './StatesNumbersComponent.css';



class StatesNumbersComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };

        this.fillTable = this.fillTable.bind(this);
    }

    componentDidMount() {
    }



    fillTable() {
        if (this.props.AllData) {
            return this.props.AllData.map((AllData, index) => {
                const { ActiveCases, Continent, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered } = AllData //destructuring
                if (Country !== 'World' && Country !== 'Total:') {

                    return (
                        <tr key={index} >
                            <td>{Country}</td>
                            <td>{Continent}</td>
                            <td>{Population}</td>
                            <td>{TotalCases}</td>
                            <td>{ActiveCases}</td>
                            <td>{NewCases}</td>
                            <td>{TotalRecovered}</td>
                            <td>{TotalDeaths}</td>
                            <td>{NewDeaths}</td>
                        </tr>
                    )
                }
            })
        }
    }



    render() {
        return (

            <Col className='statsuNumberCol'>
                <Row className='statsuNumberTitle'>
                    {this.props.Title}
                </Row>
                <Row>
                    <span className="table-wrap">
                        <Table responsive className="tableCountrys table-hover " >
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Continent</th>
                                    <th>Population</th>
                                    <th>Total Cases</th>
                                    <th>Active Cases</th>
                                    <th>New Cases</th>
                                    <th>Total Recovered</th>
                                    <th>Total Deceased</th>
                                    <th>New Deceased</th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.fillTable()}
                            </tbody>
                        </Table>
                    </span>
                </Row>
            </Col>

        );
    }
}

export default StatesNumbersComponent;