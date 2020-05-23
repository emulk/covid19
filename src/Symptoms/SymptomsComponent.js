import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col, Table, Form } from 'react-bootstrap';
import './SymptomsComponent.css';





class Symptoms extends Component {
    constructor(props) {
        super(props);
        this.state = {
            PercentageSymptomsValue: '',
            TotalPercentage: 0
        };

        this.handleChangeFeverSwitch = this.handleChangeFeverSwitch.bind(this);
        this.handlecoughSwitch = this.handlecoughSwitch.bind(this);
        this.handlefatigueSwitch = this.handlefatigueSwitch.bind(this);
        this.handleSputumSwitch = this.handleSputumSwitch.bind(this);
        this.handleShortnessSwitch = this.handleShortnessSwitch.bind(this);
        this.handleMuscleSwitch = this.handleMuscleSwitch.bind(this);
        this.handleSoreSwitch = this.handleSoreSwitch.bind(this);
        this.handleHeadacheSwitch = this.handleHeadacheSwitch.bind(this);
        this.handleChillsSwitch = this.handleChillsSwitch.bind(this);
        this.handleNauseaSwitch = this.handleNauseaSwitch.bind(this);
        this.handleNasalSwitch = this.handleNasalSwitch.bind(this);
        this.checkResultSymptoms = this.checkResultSymptoms.bind(this);
    }


    handleChangeFeverSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 80;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }

    }


    handlecoughSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 60;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handlefatigueSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 30;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleSputumSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 30;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleShortnessSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 30;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleMuscleSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 20;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleSoreSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 20;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleHeadacheSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 10;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleChillsSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 10;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    handleNauseaSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 10;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }



    handleNasalSwitch(event) {
        let _result = this.state.TotalPercentage;
        var _percent = 10;
        if (event.target.checked) {
            _result += _percent;
            this.setState({
                TotalPercentage: _result
            });
        } else {
            _result -= _percent;
            this.setState({
                TotalPercentage: _result
            });
        }
    }

    checkResultSymptoms() {

        if (this.state.TotalPercentage > 50) {
            return (
                <Col>
                    <Row>
                        <li>Self-isolation at home has been recommended those who suspect they have been infected.</li>
                    </Row>
                    <Row>
                        <li>Public health agencies have issued self-isolation instructions that include notification of healthcare providers by phone and restricting all activities outside of the home, except for getting medical care.
               </li>
                    </Row>
                    <Row>
                        <li>Do not go to work, school, or public areas. Avoid using public transportation, ride-sharing, or taxis</li>
                    </Row>
                    <Row>
                        <li>Those who have recently travelled to a country with widespread transmission or who have been in direct contact with someone diagnosed with COVID-19 have also been asked by some government health agencies to self-quarantine or practise social distancing for 14 days from the time of last possible exposure.
                </li>
                    </Row>
                    <Row>
                        <li>Attempts to relieve the symptoms may include taking regular (over-the-counter) cold medications, drinking fluids, and resting. Depending on the severity, oxygen therapy, intravenous fluids, and breathing support may be required.</li>
                    </Row>
                </Col>
            );
        } else if (this.state.TotalPercentage > 0) {
            return (
                <Col>
                    <Row>
                        <li> Wear a mask.</li>
                    </Row>
                    <Row>
                        <li>Avoid touching the eyes, nose, or mouth with unwashed hands.</li>
                    </Row>
                    <Row>
                        <li> Wash your hands, use an alcohol-based hand sanitiser with at least 60% alcohol by volume (or 120 proof) when soap and water are not readily available.</li>
                    </Row>
                    <Row>
                        <li>Stay at least 6 feet (about 2 arms’ length) from other people.</li>
                    </Row>
                    <Row>
                        <li> Do not gather in groups.</li>
                    </Row>
                    <Row>
                        <li>Stay out of crowded places and avoid mass gatherings.</li>
                    </Row>
                </Col >

            );
        }
    }

    render() {
        return (
            <Col className="symptomsComponentStyle" >

                <Row className='symptomsTitle'>
                    How do I know if I am infected?
                    </Row>
                <Row></Row>
                <Row className='symptomsSubTitle'>
                    <Col>
                        Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.
                        </Col>
                </Row>
                <Row>
                    Symptoms may appear <b>2-14 days after exposure to the virus</b>.
                </Row>
                <Row className="symptomsTablePercentage">
                    <Col>

                        <Table hover>

                            <thead>
                                <tr>
                                    <th className="symptomsColumn1">Symptom</th>
                                    <th>Check the box if you have the Symptom</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Fever</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Fever-switch"
                                            label=""
                                            onChange={this.handleChangeFeverSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dry cough</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="cough-switch"
                                            label=""
                                            onChange={this.handlecoughSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fatigue</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Fatigue-switch"
                                            label=""
                                            onChange={this.handlefatigueSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sputum production</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Sputum-switch"
                                            label=""
                                            onChange={this.handleSputumSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shortness of breath or difficulty breathing</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Shortness-switch"
                                            label=""
                                            onChange={this.handleShortnessSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Muscle pain or joint pain</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Muscle-switch"
                                            label=""
                                            onChange={this.handleMuscleSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td> Sore throat</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Sore-switch"
                                            label=""
                                            onChange={this.handleSoreSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Headache</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Headache-switch"
                                            label=""
                                            onChange={this.handleHeadacheSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chills</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Chills-switch"
                                            label=""
                                            onChange={this.handleChillsSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nausea or vomiting</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="Nausea-switch"
                                            label=""
                                            onChange={this.handleNauseaSwitch}
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nasal congestion</td>
                                    <td>
                                        <Form.Check
                                            type="switch"
                                            id="congestion-switch"
                                            label=""
                                            onChange={this.handleNasalSwitch}
                                        />
                                    </td>
                                </tr>

                            </tbody>
                        </Table>

                    </Col>

                </Row>
                <Row className="finalPercentage">
                    {this.checkResultSymptoms()}

                </Row>
            </Col>
        );
    }

}



export default withRouter(Symptoms);